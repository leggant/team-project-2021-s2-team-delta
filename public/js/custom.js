function test() {
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