<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\RawMinkContext;
use PHPUnit\Framework\Assert;
use DMore\ChromeDriver\ChromeDriver;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext  implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */

    private $extension;



    public function __construct()
    {
    }


    /**
     * @When saya memasukan username :arg1 dan password :arg2
     */
   
  

    /**
     * @When saya memasukan username :arg1 dan password :arg2
     */
    public function sayaMemasukanUsernameDanPassword($arg1, $arg2)
    {
        $this->visitPath('/');
        $page = $this->getSession()->getPage();
        $el = $page->find('xpath','//*[@id="j_username"]');
        $el->setValue($arg1);
        $el = $page->findField('j_password');
        $el->setValue($arg2);
      
    }

    /**
     * @Then saya menekan tombol submit
     */
    public function sayaMenekanTombolSubmit()
    {
        $page = $this->getSession()->getPage();
        $el=$page->findButton('Sign in');
        $el->click();     
        $this->getSession()->wait(5000);
      
    }

     /**
     * @Then saya bisa login
     */
    public function sayaBisaLogin()
    {
        Assert::assertSame('New Item','null');

    }

    /**
     * @Then saya menemukan daftar jobs
     */
    public function sayaMenemukanDaftarJobs()
    {
        throw new PendingException();
    }
}
