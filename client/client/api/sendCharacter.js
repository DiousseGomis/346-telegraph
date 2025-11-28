function sendCharacter(charAscii) {
    fetch('https://telegraph-dgs-vgn-bmt-gahndnghb6hgcxhg.switzerlandnorth-01.azurewebsites.net/api/serveur_php/html/api/saveMessage.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'charAscii=' + encodeURIComponent(charAscii)
    })
    .then(response => response.text())
    .then(text => {
        try {
            const data = JSON.parse(text);
            console.log(data);
            if (data.message) {
                alert('Success: ' + data.message);
            } else if (data.error) {
                alert('Error: ' + data.error);
            }
        } catch (error) {
            console.error('Error parsing JSON:', error, 'Response text:', text);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}