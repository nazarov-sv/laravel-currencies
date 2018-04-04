require('./bootstrap');
require("datatables");

$.extend( $.fn.dataTableExt.oStdClasses, {
    "sFilterInput": "form-control",
    "sLengthSelect": "form-control",
    "sPageButton": "page-link",
    "sPaging" : "pagination "
});


let table = $("#currencies").dataTable({
    pageLength: 25,
    lengthMenu: [ [10, 25, 50,100, -1], [10, 25, 50,100, "Все"] ],
    ajax: {
        url: '/api/currency',
        dataSrc: 'data'
    },
    columns: [
        {data: 'name'},
        {data: 'amount'},
        {data: 'volume'}
    ],
    language : {
        "processing": "Подождите...",
        "search": "Поиск:",
        "lengthMenu": "Показать _MENU_ записей",
        "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
        "infoEmpty": "Записи с 0 до 0 из 0 записей",
        "infoFiltered": "(отфильтровано из _MAX_ записей)",
        "infoPostFix": "",
        "loadingRecords": "Загрузка записей...",
        "zeroRecords": "Записи отсутствуют.",
        "emptyTable": "В таблице отсутствуют данные",
        "paginate": {
            "first": "Первая",
            "previous": "Предыдущая",
            "next": "Следующая",
            "last": "Последняя"
        },
        "aria": {
            "sortAscending": ": активировать для сортировки столбца по возрастанию",
            "sortDescending": ": активировать для сортировки столбца по убыванию"
        }
    }
});

window.table = table;


//
// setInterval( function () {
//     table.api().ajax.reload();
// }, 15000 );


$("#update-currency").click(function(){
    table.api().ajax.reload();
});
