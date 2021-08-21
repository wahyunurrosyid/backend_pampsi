# Jumlah


## Jumlah model




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/jumlah/maiores"
);

let params = {
    "child": "eos",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
"DataNotFound"
```
<div id="execution-results-GETgeneral-jumlah--model-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-jumlah--model-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-jumlah--model-"></code></pre>
</div>
<div id="execution-error-GETgeneral-jumlah--model-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-jumlah--model-"></code></pre>
</div>
<form id="form-GETgeneral-jumlah--model-" data-method="GET" data-path="general/jumlah/{model}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-jumlah--model-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-jumlah--model-" onclick="tryItOut('GETgeneral-jumlah--model-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-jumlah--model-" onclick="cancelTryOut('GETgeneral-jumlah--model-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-jumlah--model-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/jumlah/{model}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>model</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="model" data-endpoint="GETgeneral-jumlah--model-" data-component="url"  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>child</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="child" data-endpoint="GETgeneral-jumlah--model-" data-component="query"  hidden>
<br>
</p>
</form>



