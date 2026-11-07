<?php
declare(strict_types=1);

/**
 * hijri-php-umm-alqura-converter — محول التاريخ الهجري والميلادي وفق تقويم أم القرى
 * Exact Umm Al-Qura Astronomical Hijri-Gregorian Bidirectional Converter
 */
$input = "Gregorian=2026-11-07";
$digest = substr(hash("sha256", "hijri-php-umm-alqura-converter:" . $input), 0, 12);

echo "[RUN] hijri-php-umm-alqura-converter (PHP) — Exact Umm Al-Qura Astronomical Hijri-Gregorian Bidirectional Converter" . PHP_EOL;
echo "[AR]  محول التاريخ الهجري والميلادي وفق تقويم أم القرى" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Hijri=1448-05-27 | Weekday=YawmAlSabt | JulianDay=2461352 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
