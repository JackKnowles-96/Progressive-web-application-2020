//Creates Database
const db = new Dexie("Item_DB");
db.version(1).stores({
    items: '++DexID,DBID,Name,Rarity,Des,Weight'
});
var Numberofentry = 0;
var ItemIDA = [];
var ItemNameA = [];
var ItemRareA = [];
var ItemDesA = [];
var ItemWeiA = [];
var UMaxITEMS = 0;
//Get data
function Getdata(ItemID, ItemName, ItemRare, ItemDes, ItemWei, MaxITEMS) {
    Numberofentry++;
    var IDtoInt = parseInt(ItemID);
    ItemIDA.push(IDtoInt);
    ItemNameA.push(ItemName);
    ItemRareA.push(ItemRare);
    ItemDesA.push(ItemDes);
    ItemWeiA.push(ItemWei);
    UMaxITEMS = MaxITEMS;
}
//Fill Data
function Fillevent() {
    var i = 0;
    while (i != Numberofentry) {
        db.items.add({
            DBID: ItemIDA[i],
            Name: ItemNameA[i],
            Rarity: ItemRareA[i],
            Des: ItemDesA[i],
            Weight: ItemWeiA[i]
        });
        i++;
    }
    var x = 0;
    db.items.count(function (results) {
        db.items.get((results), function (amount) {
            if (UMaxITEMS == amount.DBID) {
                window.location.href = '../Items.php';
            }
        });
    });
}
//Populate Table
function Populatetable() {
    var length = 0;
    var row, cell1, cell2, cell3, cell4, cell5;
    var table = document.getElementById("ItemTable");
    db.items.count(function (itemlength) {
        for (var i = 0; i < itemlength; i++) {
            db.items.get((i + 1), function (item) {
                row = table.insertRow(1);
                cell1 = row.insertCell(0);
                cell2 = row.insertCell(1);
                cell3 = row.insertCell(2);
                cell4 = row.insertCell(3);
                cell5 = row.insertCell(4);
                cell1.innerHTML = item.DexID;
                cell2.innerHTML = item.Name;
                cell3.innerHTML = item.Rarity;
                cell4.innerHTML = item.Des;
                cell5.innerHTML = item.Weight;
            });
        }
    });
}
//Checks for table and hides/shows Update button
function Inititems() {
    //Hide update warning
    document.getElementById('UpdateAlert').style.display = 'none';
    //Offline hide update
    window.addEventListener('offline', function (e) {
        document.getElementById('updatebutton1').style.display = 'none';
    });
    //Online show update
    window.addEventListener('online', function (e) {
        document.getElementById('updatebutton1').style.display = 'inline';
    });
    if (navigator.onLine) {
        document.getElementById('updatebutton1').style.display = 'inline';
    }
    else {
        document.getElementById('updatebutton1').style.display = 'none';
    }
    //bug here
    Dexie.exists("Item_DB").then(function (exists) {
        if (exists) {
            Populatetable();
        } else {
            window.location.href = 'PHP/UpdateTable.php';
        }
    });
    //Initilizes Page
    Initpage();
}