<?php
/**
 * @author  brooke.bryan
 */

namespace Benchmark\Cli;

use Cubex\I18n\Translator\Jumbler;

/**
 * Test Benchmarking, each test will run for 50 milliseconds
 *
 * @package Benchmark\Cli
 */
class Translate extends BenchmarkCommand
{
  public function runTest()
  {
    $text = ' %1$s grants you a non-exclusive, non-transferable limited and revocable license to install the %1$s Software only on the computer(s) for which you have paid the applicable fees and taxes and from which you are licensed to access the %1$s Products or Services, and to Use the %1$s Products or Services for the sole and exclusive purposes of connecting to and Using the %1$s Products or Services for your personal or internal business purposes in accordance with these Terms and Conditions of Use. We reserve all other rights to the %1$s Products or Services. You may Use a license for the %1$s Products or Services with only one computer at a time unless the %1$s Products or Services you Use are explicitly designed and marketed to operate on more than one computer at a time concurrently. The type of license you have (including such variables as whether the license permits use of %1$s Products or Services on more than one computer, whether the licenses fees are based on the number of computers, volume of data, or both, and the length of the Subscription Periods, etc.) is set forth as part of the %1$s Product or Service description available at www.%2$s.%3$s . Should your license for the %1$s Product or Services you Use be designed for only one computer at a time you may transfer your license to another computer in the event that you cease to use the computer on which %1$s Software was originally installed. If you wish to protect multiple computers, you must obtain a separate paid license for each computer or you must obtain a multi-computer license which will be applicable to the number of computers stated in such license. You may not sub-license, or charge others to Use or access the %1$s Products or Services and you may not redistribute the %1$s Products or Services or provide others with access to or Use of them, unless you have entered into a separate Reseller Agreement or other agreement with %1$s that expressly authorizes you to engage in this activity. Without limiting the forgoing, you will not permit others to Use the %1$s Products or Services to access or decrypt data stored on servers provided by %1$s or %1$s Affiliates; you will not Use or permit others to Use the %1$s Products or Services to decrypt data encrypted by others; and you will not Use or permit others to Use the %1$s Products or Services to provide encryption or decryption services to others, whether or not such services are compensated.';
    $translate = new Jumbler();
    $translate->translate($text,"en","fr");
  }
}
