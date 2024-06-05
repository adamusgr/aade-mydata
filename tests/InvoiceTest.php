<?php

namespace Tests;

use Firebed\AadeMyData\Models\Invoice;
use PHPUnit\Framework\TestCase;
use Tests\Traits\HandlesInvoiceXml;

class InvoiceTest extends TestCase
{
    use HandlesInvoiceXml;

    public function test_invoice_validation()
    {
        $invoice = Invoice::factory()->make();
        $this->assertEmpty($invoice->validate());
    }

    public function test_invoice_xml()
    {
        $invoice = Invoice::factory()->make();
        $this->assertNotEmpty($invoice->toXml());
    }


    public function test_it_populates_invoice_auto_filled_attributes()
    {
        $doc = $this->getRequestedDocFromXml();

        $this->assertCount(2, $doc->getInvoices());

        $invoice = $doc->getInvoices()[1];

        $this->assertEquals('5AD65A46SFD5498SDV416WS5F1VS65VDFS65VDF', $invoice->getUid());
        $this->assertEquals('800000165789544', $invoice->getMark());
        $this->assertEquals('800000165989544', $invoice->getCancelledByMark());
        $this->assertEquals('54AS56DS65VF4S65DF', $invoice->getAuthenticationCode());
        $this->assertEquals(3, $invoice->getTransmissionFailure());
        $this->assertEquals('https://www.akjjasd.com/asdkasdkasdkas?asasd=asdasd', $invoice->getQrCodeUrl());
    }
}