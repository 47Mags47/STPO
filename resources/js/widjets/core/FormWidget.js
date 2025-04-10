import Widget from "./Widget";

/**
 * Abstract Class FormWidget.
 *
 * @class FormWidget
 * @method reset
 * @method serialize
 */

export default class FormWidget extends Widget {
    /**
     @abstract
    */
    name

    /**
     @abstract
    */
    value = null

    constructor(element) {
        super(element)
    }

    /**
     @abstract
    */
    reset() {}

    /**
     @abstract
    */
    serialize() {}
}
