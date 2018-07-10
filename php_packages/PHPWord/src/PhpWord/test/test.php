<?Php
require_once '../PhpWord.php';

// New Word Document
$PhpWord = new PhpWord();

// New portrait section
$section = $PhpWord->createSection();

// Add table
$table = $section->addTable();

for($r = 1; $r <= 10; $r++) { // Loop through rows
    // Add row
    $table->addRow();

    for($c = 1; $c <= 5; $c++) { // Loop through cells
        // Add Cell
        $table->addCell(1750)->addText("Row $r, Cell $c");
    }
}

// Save File
$objWriter = PhpWord_IOFactory::createWriter($PhpWord, 'Word2007');
$objWriter->save('BasicTable.docx');
?>
