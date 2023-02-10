<?php
	class Solution {

		/**
		 * @param Float $celsius
		 * @return Float[]
		 */
		function convertTemperature($celsius): Array{
			$answer = [];

			// Convert to K
			$kelvin = $celsius + 273.15;
			$answer[] = $kelvin;

			// Convert to F
			$fahrenheit = $celsius * 1.80 + 32.00;
			$answer[] = $fahrenheit;

			return $answer;
		}
	}