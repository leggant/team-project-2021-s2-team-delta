function disable() {
    const arr = []
    $("input[name='student_checkboxes[]']").each(function() {
        if(this.checked){
            arr.push(this.value)
        }
    });
    console.log(arr)
    $("#hidden_students").val(JSON.stringify(arr))
    $('#disable').submit()
}

function move(paper_id) {
    const arr = []
    console.log("Paper ID:" + paper_id)
    $("input[name='student_checkboxes[]']").each(function() {
        if(this.checked){
            arr.push(this.value)
        }
    });
    console.log(arr)
    $('#' + paper_id).val(JSON.stringify(arr))
    $('#move').submit()
}