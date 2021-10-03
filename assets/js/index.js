export default function(search_type, search_data, table_content){
    contactSelect(search_type, table_content, search_data);
}

function contactSelect (search_type, table_content, search_data) {
    var table_element=table_content.getElementsByTagName("td");
    console.log(table_element);
    for (let j = 0; j < table_element.length; j++) {
        if (table_element[j].id == search_type) {
            rowDisplay(table_element[j], table_content, search_data);
        }
    }
}

function rowDisplay(table_element, table_content, search_data){
    var txtValue = table_element.textContent || table_element.innerText;
    if (txtValue.toUpperCase().indexOf(search_data) > -1) {
        table_content.style.display = "";
    } else {
        table_content.style.display = "none";
    }
}