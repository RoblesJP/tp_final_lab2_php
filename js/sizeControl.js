function sizeControl(size) {
    var file_input = document.getElementById('imagen');

    file_input.addEventListener('change', (event) => {
        var file = event.target.files[0];
        if (file.size > size) {
            document.getElementById('sizeControl').innerHTML = 'El archivo es muy grande.';
            file_input.value = null;
        } else {
            document.getElementById('sizeControl').innerHTML = '';
        }
    })
}