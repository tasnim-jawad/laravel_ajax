const postModal = new bootstrap.Modal('#postModal', {})

function all_post() {
    fetch('/post')
        .then(res => res.text())
        .then(function(data) {
            // all_data.innerHTML = data;
            // console.log(data);
            postTable.innerHTML = data;
        });
}
all_post()

function show_data(id) {
    // console.log(`my id is = --${id} --`);
    fetch(`/post/${id}`)
        .then(res => res.text())
        .then(data =>{
            post_details.innerHTML = data;
            postModal.show();
            // console.log(data);
        })
}

function create_post(){
    fetch("/create_post")
        .then(res => res.text())
        .then(data => {
            // console.log(data);
            post_details.innerHTML = data;
            postModal.show();
        })
}

function store_post() {
    event.preventDefault();
    let formData = new FormData(event.target);
    fetch('/post',{
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            // console.log(formData);
            // console.log(data);
            show_data(data.id);
            all_post()
        })
}
function show_edit_form(id) {
    fetch(`/edit_post/${id}`)
        .then(res => res.text())
        .then(data => {
            // console.log(data);
            post_details.innerHTML = data;
            postModal.show();
        })
}
function update_post(id) {
    event.preventDefault();
    let formData = new FormData(event.target);
    fetch(`/post/${id}`,{
            method: 'POST',
            body: formData
    })
        .then(res => res.json())
        .then(data => {
            // console.log(data);
            // console.log(formData);
            show_data(data.id);
            all_post()
        })
}
function delete_post(id) {
    let text = "Are you sure to delete?";
    if (confirm(text) == true) {
        fetch(`/post/${id}/delete`,{
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('[name="csrf-token"]').content
            }
        })
        .then(res => res.json())
        .then(data => {
            // console.log(data);
            all_post()
        })
        text = "You pressed OK!";
    } else {
        text = "You canceled!";
    }

}

