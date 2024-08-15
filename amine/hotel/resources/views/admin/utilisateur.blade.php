@extends('admin.layout')
@section('content')
@if (Session::has("seccuss"))
                
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Succès !</strong>
                <span class="block sm:inline">{{Session::get('seccuss')}}</span>
              </div>
              
            @endif
<div class="container">

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

<section class="table__header">
    <h1>Gestion de Utilisateur </h1>
    <div class="input-group">
        <input type="search" placeholder="Search Data...">
    </div>
    <div class="export__file m-5">
        <label for="export-file" class="export__file-btn" title="Export File"></label>
        <input type="checkbox" id="export-file">
        <div class="export__file-options">
            <label>Export As &nbsp; &#10140;</label>
            <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
            <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
            <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
            <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
        </div>
    </div>
</section>
<main class="table" id="customers_table">
   <a href="/adduser" class="btn btn-success" >Add Utilisateur</a>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Nom & Prenom <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Phone <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Role<span class="icon-arrow">&UpArrow;</span></th>
                    <th> Action</th>

                </tr>
            </thead>
            <tbody>
              
               @foreach ($query as $item)
               <tr>
                <td> {{$item->id}}  </td>
                <td> {{$item->nom}} {{$item->prenom}}  </td>

                <td> {{$item->phone}}  </td>
                <td> {{$item->role}} </td>
             
                <td class="d-flex justify-content-center align-items-center ">
                    <button  class="btn w-10 btn-success m-3" ><a href="updateuser/{{$item->id}}"><i class="lni lni-cogs"></i></a>   </button>
                    <form action="deleteuser/{{$item->id}}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn w-10 btn-danger"><i class="lni lni-trash-can"></i></button>
                    </form>
                </td>
            </tr>
               @endforeach
            </tbody>
        </table>
    </section>
</main>


<script>/**
    Responsive HTML Table With Pure CSS - Web Design/UI Design
    
    Code written by:
    👨🏻‍⚕️ @Coding Design (Jeet Saru)
    
    > You can do whatever you want with the code. However if you love my content, you can **SUBSCRIBED** my YouTube Channel.
    
    🌎link: www.youtube.com/codingdesign 
    */
    
    const search = document.querySelector('.input-group input'),
        table_rows = document.querySelectorAll('tbody tr'),
        table_headings = document.querySelectorAll('thead th');
    
    // 1. Searching for specific data of HTML table
    search.addEventListener('input', searchTable);
    
    function searchTable() {
        table_rows.forEach((row, i) => {
            let table_data = row.textContent.toLowerCase(),
                search_data = search.value.toLowerCase();
    
            row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
            row.style.setProperty('--delay', i / 25 + 's');
        })
    
        document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
            visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
        });
    }
    
    // 2. Sorting | Ordering data of HTML table
    
    table_headings.forEach((head, i) => {
        let sort_asc = true;
        head.onclick = () => {
            table_headings.forEach(head => head.classList.remove('active'));
            head.classList.add('active');
    
            document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
            table_rows.forEach(row => {
                row.querySelectorAll('td')[i].classList.add('active');
            })
    
            head.classList.toggle('asc', sort_asc);
            sort_asc = head.classList.contains('asc') ? false : true;
    
            sortTable(i, sort_asc);
        }
    })
    
    
    function sortTable(column, sort_asc) {
        [...table_rows].sort((a, b) => {
            let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
                second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();
    
            return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
        })
            .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
    }
    
    // 3. Converting HTML table to PDF
    
    const pdf_btn = document.querySelector('#toPDF');
    const customers_table = document.querySelector('#customers_table');
    
    
    const toPDF = function (customers_table) {
        const html_code = `
        <!DOCTYPE html>
        <link rel="stylesheet" type="text/css" href="style.css">
        <main class="table" id="customers_table">${customers_table.innerHTML}</main>`;
    
        const new_window = window.open();
         new_window.document.write(html_code);
    
        setTimeout(() => {
            new_window.print();
            new_window.close();
        }, 400);
    }
    
    pdf_btn.onclick = () => {
        toPDF(customers_table);
    }
    
    // 4. Converting HTML table to JSON
    
    const json_btn = document.querySelector('#toJSON');
    
    const toJSON = function (table) {
        let table_data = [],
            t_head = [],
    
            t_headings = table.querySelectorAll('th'),
            t_rows = table.querySelectorAll('tbody tr');
    
        for (let t_heading of t_headings) {
            let actual_head = t_heading.textContent.trim().split(' ');
    
            t_head.push(actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase());
        }
    
        t_rows.forEach(row => {
            const row_object = {},
                t_cells = row.querySelectorAll('td');
    
            t_cells.forEach((t_cell, cell_index) => {
                const img = t_cell.querySelector('img');
                if (img) {
                    row_object['customer image'] = decodeURIComponent(img.src);
                }
                row_object[t_head[cell_index]] = t_cell.textContent.trim();
            })
            table_data.push(row_object);
        })
    
        return JSON.stringify(table_data, null, 4);
    }
    
    json_btn.onclick = () => {
        const json = toJSON(customers_table);
        downloadFile(json, 'json')
    }
    
    // 5. Converting HTML table to CSV File
    
    const csv_btn = document.querySelector('#toCSV');
    
    const toCSV = function (table) {
        // Code For SIMPLE TABLE
        // const t_rows = table.querySelectorAll('tr');
        // return [...t_rows].map(row => {
        //     const cells = row.querySelectorAll('th, td');
        //     return [...cells].map(cell => cell.textContent.trim()).join(',');
        // }).join('\n');
    
        const t_heads = table.querySelectorAll('th'),
            tbody_rows = table.querySelectorAll('tbody tr');
    
        const headings = [...t_heads].map(head => {
            let actual_head = head.textContent.trim().split(' ');
            return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
        }).join(',') + ',' + 'image name';
    
        const table_data = [...tbody_rows].map(row => {
            const cells = row.querySelectorAll('td'),
                img = decodeURIComponent(row.querySelector('img').src),
                data_without_img = [...cells].map(cell => cell.textContent.replace(/,/g, ".").trim()).join(',');
    
            return data_without_img + ',' + img;
        }).join('\n');
    
        return headings + '\n' + table_data;
    }
    
    csv_btn.onclick = () => {
        const csv = toCSV(customers_table);
        downloadFile(csv, 'csv', 'customer orders');
    }
    
    // 6. Converting HTML table to EXCEL File
    
    const excel_btn = document.querySelector('#toEXCEL');
    
    const toExcel = function (table) {
        // Code For SIMPLE TABLE
        // const t_rows = table.querySelectorAll('tr');
        // return [...t_rows].map(row => {
        //     const cells = row.querySelectorAll('th, td');
        //     return [...cells].map(cell => cell.textContent.trim()).join('\t');
        // }).join('\n');
    
        const t_heads = table.querySelectorAll('th'),
            tbody_rows = table.querySelectorAll('tbody tr');
    
        const headings = [...t_heads].map(head => {
            let actual_head = head.textContent.trim().split(' ');
            return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
        }).join('\t') + '\t' + 'image name';
    
        const table_data = [...tbody_rows].map(row => {
            const cells = row.querySelectorAll('td'),
                img = decodeURIComponent(row.querySelector('img').src),
                data_without_img = [...cells].map(cell => cell.textContent.trim()).join('\t');
    
            return data_without_img + '\t' + img;
        }).join('\n');
    
        return headings + '\n' + table_data;
    }
    
    excel_btn.onclick = () => {
        const excel = toExcel(customers_table);
        downloadFile(excel, 'excel');
    }
    
    const downloadFile = function (data, fileType, fileName = '') {
        const a = document.createElement('a');
        a.download = fileName;
        const mime_types = {
            'json': 'application/json',
            'csv': 'text/csv',
            'excel': 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        }
        a.href = `
            data:${mime_types[fileType]};charset=utf-8,${encodeURIComponent(data)}
        `;
        document.body.appendChild(a);
        a.click();
        a.remove();
    }
    </script>
    <style>
        /*
Responsive HTML Table With Pure CSS - Web Design/UI Design

Code written by:
👨🏻‍⚕️ Coding Design (Jeet Saru)

> You can do whatever you want with the code. However if you love my content, you can **SUBSCRIBED** my YouTube Channel.

🌎link: www.youtube.com/codingdesign 
*/

@media print {
 .table, .table__body {
  overflow: visible;
  height: auto !important;
  width: auto !important;
 }
}



main.table {
    width: 82vw;
    height: 90vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table__header .input-group {
    width: 35%;
    height: 100%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .2s;
}

.table__header .input-group:hover {
    width: 45%;
    background-color: #fff8;
    box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
    width: 1.2rem;
    height: 1.2rem;
}

.table__header .input-group input {
    width: 100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
}


.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
    visibility: visible;
}


table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.active {
    background-color: #86e49d;
    color: #006b21;
}

.status.libre {
    background-color: #d893a3;
    color: #b30021;
}

.status.pending {
    background-color: #ebc474;
}

.status.shipped {
    background-color: #6fcaea;
}


@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
    border: 1.4px solid transparent;
    
    text-align: center;
    font-size: 1rem;
    
    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid #6c00bd;
}

thead th:hover {
    color: #6c00bd;
}

thead th.active span.icon-arrow{
    background-color: #6c00bd;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}

thead th.active,tbody td.active {
    color: #6c00bd;
}

.export__file {
    position: relative;
}

.export__file .export__file-btn {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    background: #fff6 url(images/export.png) center / 80% no-repeat;
    border-radius: 50%;
    transition: .2s ease-in-out;
}

.export__file .export__file-btn:hover { 
    background-color: #fff;
    transform: scale(1.15);
    cursor: pointer;
}

.export__file input {
    display: none;
}

.export__file .export__file-options {
    position: absolute;
    right: 0;
    
    width: 12rem;
    border-radius: .5rem;
    overflow: hidden;
    text-align: center;

    opacity: 0;
    transform: scale(.8);
    transform-origin: top right;
    
    box-shadow: 0 .2rem .5rem #0004;
    
    transition: .2s;
}

.export__file input:checked + .export__file-options {
    opacity: 1;
    transform: scale(1);
    z-index: 100;
}

.export__file .export__file-options label{
    display: block;
    width: 100%;
    padding: .6rem 0;
    background-color: #f2f2f2;
    
    display: flex;
    justify-content: space-around;
    align-items: center;

    transition: .2s ease-in-out;
}

.export__file .export__file-options label:first-of-type{
    padding: 1rem 0;
    background-color: #86e49d !important;
}

.export__file .export__file-options label:hover{
    transform: scale(1.05);
    background-color: #fff;
    cursor: pointer;
}

.export__file .export__file-options img{
    width: 2rem;
    height: auto;
}
    </style>

@endsection