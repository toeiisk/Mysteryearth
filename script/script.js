var count=0;
function pushDetail(arr, page) {
    console.log(arr);
    for (let i = 0; i < arr.length; i += 1) {
        if (arr[i]['page_name'] == page) {
            try {
              document.getElementById(arr[i]['page']).innerHTML = arr[i]['detail'];
          }
            catch(err) {
                alert("เกิดข้อผิดพลาดในการโหลดข้อมูลกรุณากด alt+shift+F5");
                console.log(count);
            }
        }
    }
}
function showEdit() {
    console.log(arr);
    // document.getElementById("showEdit").value = cha;
}



