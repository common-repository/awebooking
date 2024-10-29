<?php

namespace WPLibs\Http\Exception;

class LengthRequiredException extends HttpException {
	/**
	 * Constructor.
	 *
	 * @param string     $message   The internal exception message.
	 * @param \Exception $previous  The previous exception.
	 * @param integer    $code      The internal exception code.
	 */
	public function __construct( $message = 'Length Required', \Exception $previous = null, $code = 0 ) {
		parent::__construct( 411, $message, $previous, [], $code );
	}
}
