
    <?php 
        require_once("./Invoice.php");
        $invoice = new Invoice(12345, "Descição do produto", 10, 1000);
        printf("%s = %s <br> TOTAL: %.2f ", $invoice->getNumero(), $invoice->getDescricao(), $invoice->getInvoiceAmount())
    ?>