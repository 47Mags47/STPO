<?php

namespace App\Core;

use Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class XLSXWriter extends Writer
{
    private $spreadsheet;
    private $activeSheet;
    private $writer;

    public function __construct(public string|null $patternPath = null)
    {
        parent::__construct();

        $this->spreadsheet = $patternPath !== null
            ? IOFactory::load($patternPath)
            : new Spreadsheet();

        $this->activeSheet = $this->spreadsheet->getActiveSheet();
        $this->writer = IOFactory::createWriter($this->spreadsheet, 'Xlsx');
    }

    public function setActiveSheet()
    {
        //
    }

    public function setHeaders(array $headers)
    {
        foreach ($headers as $cell => $header) {
            $this->activeSheet->setCellValue([$cell + 1, 1], $header);
        }
        $this->writerRow = $this->writerRow + 1;

        return $this;
    }

    public function writeRows(array $data)
    {
        // Ассоциативный массив координата => значение
        if (is_string(array_keys($data)[0])) {
            foreach ($data as $coord => $value) {
                if (!preg_match('/[A-Z]*[0-9]*/', $coord))
                    throw new Exception("Неверный формат координат xlsx $coord", 1);

                $this->activeSheet->setCellValue($coord, $value);
            }
            return $this;
        }

        // Массив данных
        foreach ($data as $row => $row_value) {
            // Массив массивов строка => колонки
            if (is_array($row_value))
                foreach ($row_value as $cell => $value) {
                    $this->activeSheet->setCellValue([$cell + 1, $this->writerRow], $value);
                }
            // Просто массив
            else
                foreach ($row_value as $value) {
                    $this->activeSheet->setCellValue("A" . $this->writerRow, $value);
                }

            $this->writerRow = $this->writerRow + 1;
        }
        return $this;
    }

    public function save()
    {
        /* Форматирование перед сохранением */
        // Автоширина для колонок
        $cellIterator = $this->activeSheet->getRowIterator()->current()->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(true);
        foreach ($cellIterator as $cell) {
            $this->activeSheet->getColumnDimension($cell->getColumn())->setAutoSize(true);
        }

        $this->writer->save($this->filePath . '/' . $this->fileName);
        return $this;
    }

    public function setStartRow(int $row)
    {
        $this->writerRow = $row;
    }
}
