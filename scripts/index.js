const option_inputs = document.getElementById('option_inputs');
const add_option = document.getElementById('add_option');

add_option.addEventListener('click', addOption);
function addOption(e) {
    e.preventDefault();
    const curTime = +new Date();

    var e = document.createElement('div');
    e.setAttribute("class", "form_inp_option");
    e.setAttribute("id", `${curTime}`);
    e.innerHTML = `<input type="text" name="options[]" />
    <span onclick="removeOption('${curTime}')" remove >❌</span>`;

    option_inputs.appendChild(e);
}

function removeOption(id) {
    document.getElementById(id).remove();
}