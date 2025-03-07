<?php

// This will return all files in that folder
$files = scandir("files/IPE/1st Year & 2nd Year/");

// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
    	<!-- Displaying file name !-->
        <?php echo $files[$a]; ?>

        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        <a href="files/IPE/1st Year & 2nd Year/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
    </p>
    <?php
}