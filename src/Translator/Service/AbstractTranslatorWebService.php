<?php
	/**
	 * @author Gabriel Jacinto <gamjj74@hotmail.com>
	 * @license MIT License
	*/
	
	namespace Translator\Service;

	use Translator\TranslatorInterface;
	use Translator\Http\Request;

	abstract AbstractTranslatorWebService implements TranslatorInterface{
		/**
		 * Object for HTTP requests
		 *
		 * @var \Translator\Http\Request
		*/
		protected $request;

		/**
		 * @param \Translator\Http\Request
		*/
		public function __construct( Request $request ){
			$this->request = $request;
		}
	}