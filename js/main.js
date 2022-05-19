function formFunction(value){
    // var select = document.getElementById('select-product');
    // var value = select.options[select.selectedIndex].value;
//  console.log("test")
var form = document.getElementById('type');
    if (value=="DVD"){
        
        form.innerHTML=`
        <div class="mb-3">
            <label for="size" class="form-label">Size (MB)</label>
            <div id="help" class="form-text">Please provide dimensions in MBs format.</div>
            <input type="number" id="size" step="0.01" class="form-control" name="size" required>
        </div>
        `
    }
    else if (value=="Book"){
        form.innerHTML=`
        
        <div class="mb-3">
            <label for="weight" class="form-label">Weight (KG)</label>
            <div id="help" class="form-text">Please provide dimensions in kilograms format.</div>
            <input type="number" id="weight" step="0.01" class="form-control" name="weight" required>
        </div>
        `
    }
    else if (value=="Furniture")
    {
        form.innerHTML=`
        <div class="mb-3">
            <label for="height" class="form-label">Height (CM)</label>
            <div id="help" class="form-text">Please provide height in centimeter format.</div>

            <input type="number" id="height" step="0.01" class="form-control" name="height" required>
        </div>
        <div class="mb-3">
            <label for="width" class="form-label">Width (CM)</label>
            <div id="help" class="form-text">Please provide width in centimeter format.</div>

            <input type="number" id="width" step="0.01" class="form-control" name="width" required>
        </div>
        <div class="mb-3">
            <label for="length" class="form-label">Length (CM)</label>
            <div id="help" class="form-text">Please provide Length in centimeter format.</div>
            <input type="number" id="length" step="0.01" class="form-control" name="length" required>
        </div>
        `
    }
}
