<?php include_once('header.php') ?>

<div id="wrappeer">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card ">
                    <div class="card-title">
                        <h1 class="text-center ">Guard Posting Request Id: <?php echo $fetch->req_id ?></h1>
                    </div>
                    <div class="card-body ">
                        <form action="" method="post" style="border:2px solid black;padding:10px;">
                            <div class="form-group mb-3">
                                <label for="address">Posting Address</label>
                                <textarea name="address" id="address" cols="30" rows="2" disabled
                                    class="form-control"><?php echo $fetch->address ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="posting_date" class="form-label ">Posting Date</label>
                                <input type="text" name="posting_date" id="posting_date" value="<?php echo $fetch->posting_date ?>"
                                    disabled class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nameOptions">Avaliable Guards </label>
                                <select name="post" id="nameOptions" class="form-control" onchange="myfunction()">
                                    <option value="" class="text-center">List of Avaliable Guards</option>
                                    <?php foreach ($fetch1 as $fg) { ?>
                                        <option value="<?php $fg->gu_id; ?>" class=""><?php echo $fg->full_name ?></option>
                                    <?php } ?>
                                </select>
                                <div class="from-group">
                                
                                <p>Selected Options: <span id="selectedList"></span></p>
                            </div>
                                <?php $i = $fetch->number_of_guard; ?>

                                <script>
                                    // Initialize an empty array to store selected options
                                    let selectedArray = [];
                                    //var a="<?php echo $i?>";
                                    function myfunction() {
                                        const selectElement = document.getElementById('nameOptions');
                                        const selectedOption = selectElement.options[selectElement.selectedIndex];

                                        if (selectedArray.length < 4) {
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
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php') ?>