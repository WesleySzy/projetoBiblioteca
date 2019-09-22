<?php include "conexao_banco.php";


if (empty($_POST["edit_item_id"])) {
    $edit_item_id = "";
} else {
    $edit_item_id = clean($_POST["edit_item_id"]);
}

if (empty($_POST["item_name"])) {
    $item_nameErr = "Item Name is required";
} else {
    $item_name = clean($_POST["item_name"]);
}


if (empty($_POST["item_category"])) {
    $item_categoryErr = "Category is required";
} else {
    $item_category = clean($_POST["item_category"]);
}

if (empty($_POST["item_description"])) {
    $item_descriptionErr = "Item Description is required";
} else {
    $item_description = clean($_POST["item_description"]);
}

if (empty($_POST["item_critical_lvl"])) {
    $item_critical_lvlErr = "Item Critical Level is required";
} else {
    $item_critical_lvl = clean($_POST["item_critical_lvl"]);
}

if (empty($_POST["quantity"])) {
    $quantityErr = "Quantity is required";
} else {
    $quantity = clean($_POST["quantity"]);
}

if (empty($_POST["received_by"])) {
    $ureceived_by = "Who received is required";
} else {
    $received_by = clean($_POST["received_by"]);
}
?> 