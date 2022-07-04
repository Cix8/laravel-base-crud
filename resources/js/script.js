const deleteBtn = document.getElementById('delete-btn');
console.log(deleteBtn);
const confirmBtn = document.getElementById('yes-btn');
console.log(confirmBtn);
const deniedBtn = document.getElementById('no-btn');
console.log(deniedBtn);
const selectList = document.getElementById('select-list');
console.log(selectList);

if (deleteBtn !== null) {
    deleteBtn.addEventListener('click', function() {
        selectList.classList.remove('d-none');

        deniedBtn.addEventListener('click', hideSelectList);
    })
}

function hideSelectList() {
    selectList.classList.add('d-none');
}