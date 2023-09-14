$(document).ready(function () {
    checkLastRequest();
});


function getDataFromApi() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '/ajax/data');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.responseType = 'json';
    xhr.onload = function () {
        if (xhr.status !== 200) {
            return;
        }
        const response = xhr.response;
        setData('servers', response.servers);
        setData('news', response.news);
        setData('lastRequest', response.lastRequest);

        if (document.getElementById('main_news')) {
            document.getElementById('main_news').innerHTML = response.news;
        }

        if (document.getElementById('main_monitoring')) {
            document.getElementById('main_monitoring').innerHTML = response.servers;
        }

    };
    xhr.send();
}

function checkLastRequest() {
    const lastRequest = new Date(getData('lastRequest'));
    const dateDiff = new Date() - lastRequest;

    if (Math.floor(dateDiff / 1000 / 60) > 2) {
        getDataFromApi();
    } else {

        if (document.getElementById('main_news')) {
            document.getElementById('main_news').innerHTML = getData('news');
        }

        if (document.getElementById('main_monitoring')) {
            document.getElementById('main_monitoring').innerHTML = getData('servers');
        }

    }
}

/**
 *
 * @param {string} param
 * @returns {string}
 */
function getData(param) {
    return localStorage.getItem(param);
}

/**
 *
 * @param {string} param
 * @param {string} value
 */
function setData(param, value) {
    localStorage.setItem(param, value);
}
