<?php

$handle = fopen("nss_rank.csv","r");
$data = fgetcsv($handle);
//print_r($data);
echo $data[0]. "<br />\n";
echo $data[1]. "<br />\n";
echo $data[2]. "<br />\n";
echo $data[3]. "<br />\n";
echo $data[2][3]. "<br />\n";


//Import the contents of a CSV file after uploading it
//http://www.bin-co.com/php/scripts/csv_import_export/
//Aruguments : $table - The name of the table the data must be imported to
//                $fields - An array of fields that will be used
//                $csv_fieldname - The name of the CSV file field
function CSVImport($table, $fields, $csv_fieldname='nss_rank.csv') {
    print $_FILES[$csv_fieldname]['name'];
    if(!$_FILES[$csv_fieldname]['name']) return;

    $handle = fopen($_FILES[$csv_fieldname]['tmp_name'],'r');
    if(!$handle) die('Cannot open uploaded file.');

    $row_count = 0;
    $sql_query = "INSERT INTO $table(". implode(',',$fields) .") VALUES(";

    $rows = array();

    //Read the file as csv
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $row_count++;
        foreach($data as $key=>$value) {
            $data[$key] = "'" . addslashes($value) . "'";
        }
        $rows[] = implode(",",$data);
    }
    $sql_query .= implode("),(", $rows);
    $sql_query .= ")";
    fclose($handle);

    if(count($rows)) { //If some recores  were found,
        //Replace these line with what is appropriate for your DB abstraction layer
        mysql_query("TRUNCATE TABLE $table") or die("MySQL Error: " . mysql_error()); //Delete the existing records
        mysql_query($sql_query) or die("MySQL Error: " . mysql_error()); // and insert the new ones.

        print 'Successfully imported '.$row_count.' record(s)';
    } else {
        print 'Cannot import data - no records found.';
    }
} 
