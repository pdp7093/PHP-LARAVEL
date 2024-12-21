<select id="nameOptions" onchange="addToArray()" size="4">
    <option value="Name1">Name1</option>
    <option value="Name2">Name2</option>
    <option value="Name3">Name3</option>
    <option value="Name4">Name4</option>
</select>

<p>Selected Options: <span id="selectedList"></span></p>

<?php
    $str="name1,name2";
    $arr=explode(",",$str);
    print_r($arr);


    foreach($arr as $ar)
    {
        echo "value";
    }
?>
<script>
    // Initialize an empty array to store selected options
    let selectedArray = [];

    function addToArray() {
        const selectElement = document.getElementById('nameOptions');
        const selectedOption = selectElement.options[selectElement.selectedIndex];

        if (selectedArray.length < 2) {
            if (!selectedArray.includes(selectedOption.value)) {
                // Add selected value to the array
                selectedArray.push(selectedOption.value);

                // Disable the selected option
                selectedOption.disabled = true;

                // Display updated array
                document.getElementById('selectedList').innerText = selectedArray.join(", ");
            }

        } else {
            // Show message if more than 2 options are selected
            alert("You met the requirement: Only 2 names can be selected!");
        }
        console.log(selectedArray);
    }
</script>
