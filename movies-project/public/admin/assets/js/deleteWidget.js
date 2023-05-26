let idsArray = []
const idsHTML = document.querySelectorAll('.ids');
const btnDeleteAll = document.querySelector('#btnDeleteAll');
const btnDeletes = document.querySelectorAll('.btn-delete');

idsHTML.forEach(element => {
    element.addEventListener('change', function () {
        if (element.checked) {
            idsArray.push(element.value);
        } else {
            idsArray.splice(idsArray.indexOf(element.value), 1);
        }
        console.log(idsArray);
    });
});

function deleleRequest(apiURL, responseURL) {
    btnDeleteAll.addEventListener('click', function () {
        deleteFunc();
    });
    btnDeletes.forEach(element => {
        element.addEventListener('click', function () {
            idsArray.push(element.getAttribute('data'));
            deleteFunc();
        });
    });
}

function deleteFunc() {
    let promp = confirm('Are you sure you want to delete');
    if (promp) {
        let data = {
            'ids': idsArray
        }
        deleteAPI(apiURL, data).then(function (response) {
            console.log(response);
            if (response.status == 200) {
                alert("Xoa thanh cong");
                window.location.href = responseURL;
            }
        });
    }
}

