async function save(url, object) {
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(object)
    });

    let result = await response;

    let body = await result.json();

    return {
        'status': result.status,
        'url': result.url,
        'body': body
    };
}

async function update(url, object) {
    const response = await fetch(url, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(object)
    });

    let result = await response;

    let body = await result.json();

    return {
        'status': result.status,
        'url': result.url,
        'body': body
    };
}


async function uploadFile(url, data) {
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Accept': 'application/json'
        },
        body: data
    });

    let result = await response;
    let body = await result.json();
    return {
        'status': result.status,
        'url': result.url,
        'body': body
    };
}
