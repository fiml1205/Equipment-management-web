// create database
var data = [
    {
        id: 1,
        name: 'TV',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'Washer',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'Selling Fan',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'phone',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'TV',
        action: 'Turn on',
        date: 12345
    },   
    {
        id: 1,
        name: 'phone',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'Selling Fan',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'Selling Fan',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'washer',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'TV',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'phone',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'Selling Fan',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'phone',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'TV',
        action: 'Turn on',
        date: 12345
    },
    {
        id: 1,
        name: 'Washer',
        action: 'Turn on',
        date: 12345
    },
]


function getData() {
    viewData(data)
}

// show data on HTML
function viewData (array) {
    var table = ``
    array.map(value => {
        table += `<tr>
            <td>${value.id}</td>
            <td align="center">${value.name}</td>
            <td align="center">${value.action}</td>
            <td align="end">${value.date}</td>
        </tr>`
    })
    document.getElementById('database').innerHTML = table
}


function searchData() {
    var valueSearchInput = document.getElementById('search').value
    var valueSearched = data.filter(value => {
        return value.name.toUpperCase().includes(valueSearchInput.toUpperCase())
    })

    viewData(valueSearched)
}


