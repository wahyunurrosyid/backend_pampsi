# Activity


## List Activity
untuk list activity

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/activity"
);

let params = {
    "fields[log_name]": "voluptas",
    "filter[log_name]": "et",
    "sort": "corporis",
    "page[number]": "6",
    "page[size]": "12",
    "include": "veniam",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json

Unauthorized.
```
<div id="execution-results-GETadmin-activity" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-activity"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-activity"></code></pre>
</div>
<div id="execution-error-GETadmin-activity" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-activity"></code></pre>
</div>
<form id="form-GETadmin-activity" data-method="GET" data-path="admin/activity" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-activity', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-activity" onclick="tryItOut('GETadmin-activity');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-activity" onclick="cancelTryOut('GETadmin-activity');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-activity" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/activity</code></b>
</p>
<p>
<label id="auth-GETadmin-activity" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-activity" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[log_name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[log_name]" data-endpoint="GETadmin-activity" data-component="query"  hidden>
<br>
select kolom 'log_name','description','subject_type',
'subject_id','causer_type','causer_id','properties','created_at','updated_at'</p>
<p>
<b><code>filter[log_name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[log_name]" data-endpoint="GETadmin-activity" data-component="query"  hidden>
<br>
Filter by log_name.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-activity" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-activity" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-activity" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETadmin-activity" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
</form>


## Recent Activity

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/recent-activity/magnam"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json

Unauthorized.
```
<div id="execution-results-GETuser-recent-activity--model-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-recent-activity--model-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-recent-activity--model-"></code></pre>
</div>
<div id="execution-error-GETuser-recent-activity--model-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-recent-activity--model-"></code></pre>
</div>
<form id="form-GETuser-recent-activity--model-" data-method="GET" data-path="user/recent-activity/{model}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-recent-activity--model-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-recent-activity--model-" onclick="tryItOut('GETuser-recent-activity--model-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-recent-activity--model-" onclick="cancelTryOut('GETuser-recent-activity--model-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-recent-activity--model-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/recent-activity/{model}</code></b>
</p>
<p>
<label id="auth-GETuser-recent-activity--model-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-recent-activity--model-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>model</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="model" data-endpoint="GETuser-recent-activity--model-" data-component="url"  hidden>
<br>
</p>
</form>



