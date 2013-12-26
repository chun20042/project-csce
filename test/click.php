$('#add').click(function(e) {
    var newBlock1 = $('<div id="block1" style="width: 100px; height: 100px; background-color: red; cursor: pointer;"></div>');
    var newBlock2 = $('<div id="block2" style="width: 100px; height: 100px; background-color: green; cursor: pointer;"></div>');
    $('body').append(newBlock1);
    $('body').append(newBlock2);
    $(this).remove();
})
 
$('#block1').click(function(e) {
    alert("TEST RESULT 1");
});
 
$('#block2').live("click", function(e) {
    alert("TEST RESULT 2");
});