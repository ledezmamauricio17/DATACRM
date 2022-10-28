const LoadData = () => {
    $.get('../controller/controller.php', { 'sessionName': '5e079ccb635c00c23b300' }, function(res) {
        let html = ";";

        for (let i = 0; i < 2; i++) {
            html += `<tr>
                        <td>${res.data[i]['id']}</td>
                        <td>${res.data[i]['contact_no']}</td>
                        <td>${res.data[i]['lastname']}</td>
                        <td>${res.data[i]['createdtime']}</td>
                    </tr>`;
            $('#td').append(html);
        }
    });
}