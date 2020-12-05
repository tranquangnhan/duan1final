function checkDelete(link) {
    Swal.fire({
        title: 'Xoá?',
        text: "Bạn có chắc muốn xoá không!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Đã xoá!',
                'Bạn đã xoá thành công.',
                'success'
            )
            window.location.href = link;
        } else {
            return false;
        }

    })
}