    <script src="https://unpkg.com/dexie@latest/dist/dexie.js"></script>
    <script src="../JS/ItemDB.js"></script>
    <?php
    session_start();
    //gets the Data from MYSQL
    $mysqli = mysqli_connect("localhost", "1413679", "o3etow", "db1413679");
        $result = mysqli_query($mysqli, "SELECT ItemID, ItemName, ItemRarity, ItemDes, ItemWeight FROM Items")
    or die("Failed to query");
    //gets the DB Item count
    $result2 = mysqli_query($mysqli, "SELECT * FROM Items ORDER BY ItemID DESC LIMIT 0, 1")
    or die("Failed to query");
    $Itemarray = mysqli_fetch_array($result2);
    ?> 
    <script> var MaxITEMS = "<?php echo $Itemarray["ItemID"]; ?>";</script>
    <script> Dexie.delete('Item_DB'); </script>
    <?php
    //populates indexeddb with mysql results
    while($ItemResults = mysqli_fetch_array($result)) {
    ?>
    <script> var OFFID = "<?php echo $ItemResults['ItemID']; ?>";</script>
    <script> var OFFName = "<?php echo $ItemResults['ItemName']; ?>";</script>
    <script> var OFFRare = "<?php echo $ItemResults['ItemRarity']; ?>";</script>
    <script> var OFFDes = "<?php echo $ItemResults['ItemDes']; ?>";</script>
    <script> var OFFWei = "<?php echo $ItemResults['ItemWeight']; ?>";</script>
    <script> Getdata(OFFID, OFFName, OFFRare, OFFDes, OFFWei, MaxITEMS); </script>
    <?php 
    }
    //updates user database
    if (isset($_SESSION["username"])) {
    //updates user version number
    $username = $_SESSION["username"];
    $itemupdate = $Itemarray["ItemID"];
    $sql = mysqli_query($mysqli,"UPDATE Accounts SET ItemVer = $itemupdate WHERE Username = '$username'");
    }
    ?>
    <script> Fillevent(); </script> 
    <?php
    ?>