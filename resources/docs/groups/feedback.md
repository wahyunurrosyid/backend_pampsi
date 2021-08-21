# Feedback


## list feedback




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/feedback"
);

let params = {
    "page": "voluptatibus",
    "per_page": "voluptatem",
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


> Example response (500):

```json
{
    "message": "SQLSTATE[42S02]: Base table or view not found: 1146 Table 'pampsi_db.feedback' doesn't exist (SQL: select count(*) as aggregate from `feedback`)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
    "line": 671,
    "trace": [
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 631,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2270,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2258,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2753,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2259,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2369,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2328,
            "function": "runPaginationCountQuery",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php",
            "line": 731,
            "function": "getCountForPagination",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\app\\Http\\Controllers\\FeedbackController.php",
            "line": 29,
            "function": "paginate",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "listFeedback",
            "class": "App\\Http\\Controllers\\FeedbackController",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 386,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 352,
            "function": "callControllerCallable",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 326,
            "function": "callLumenController",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 279,
            "function": "callControllerAction",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 264,
            "function": "callActionOnArrayBasedRoute",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 166,
            "function": "handleFoundRoute",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "function": "Laravel\\Lumen\\Concerns\\{closure}",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Routing\\Pipeline.php",
            "line": 48,
            "function": "call_user_func"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Laravel\\Lumen\\Routing\\{closure}",
            "class": "Laravel\\Lumen\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Routing\\Pipeline.php",
            "line": 30,
            "function": "call_user_func"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Laravel\\Lumen\\Routing\\{closure}",
            "class": "Laravel\\Lumen\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 423,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 172,
            "function": "sendThroughPipeline",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 92,
            "function": "dispatch",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 333,
            "function": "handle",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Console\\Kernel.php",
            "line": 116,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\artisan",
            "line": 35,
            "function": "handle",
            "class": "Laravel\\Lumen\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETgeneral-feedback" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-feedback"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-feedback"></code></pre>
</div>
<div id="execution-error-GETgeneral-feedback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-feedback"></code></pre>
</div>
<form id="form-GETgeneral-feedback" data-method="GET" data-path="general/feedback" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-feedback', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-feedback" onclick="tryItOut('GETgeneral-feedback');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-feedback" onclick="cancelTryOut('GETgeneral-feedback');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-feedback" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/feedback</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page" data-endpoint="GETgeneral-feedback" data-component="query"  hidden>
<br>
</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="per_page" data-endpoint="GETgeneral-feedback" data-component="query"  hidden>
<br>
</p>
</form>


## delete feedback




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/feedback/est/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "SQLSTATE[42S02]: Base table or view not found: 1146 Table 'pampsi_db.feedback' doesn't exist (SQL: select * from `feedback` where `feedback`.`id` = est limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
    "line": 671,
    "trace": [
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 631,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2270,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2258,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2753,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2259,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php",
            "line": 548,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php",
            "line": 532,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Concerns\\BuildsQueries.php",
            "line": 143,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php",
            "line": 354,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\ForwardsCalls.php",
            "line": 23,
            "function": "find",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php",
            "line": 1736,
            "function": "forwardCallTo",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php",
            "line": 1748,
            "function": "__call",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\app\\Http\\Controllers\\FeedbackController.php",
            "line": 56,
            "function": "__callStatic",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "deleteFeedback",
            "class": "App\\Http\\Controllers\\FeedbackController",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 386,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 352,
            "function": "callControllerCallable",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 326,
            "function": "callLumenController",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 279,
            "function": "callControllerAction",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 264,
            "function": "callActionOnArrayBasedRoute",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 234,
            "function": "handleFoundRoute",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 170,
            "function": "handleDispatcherResponse",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "function": "Laravel\\Lumen\\Concerns\\{closure}",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Routing\\Pipeline.php",
            "line": 48,
            "function": "call_user_func"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Laravel\\Lumen\\Routing\\{closure}",
            "class": "Laravel\\Lumen\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Routing\\Pipeline.php",
            "line": 30,
            "function": "call_user_func"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Laravel\\Lumen\\Routing\\{closure}",
            "class": "Laravel\\Lumen\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 423,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 172,
            "function": "sendThroughPipeline",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 92,
            "function": "dispatch",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 333,
            "function": "handle",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Console\\Kernel.php",
            "line": 116,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\artisan",
            "line": 35,
            "function": "handle",
            "class": "Laravel\\Lumen\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETgeneral-feedback--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-feedback--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-feedback--id--delete"></code></pre>
</div>
<div id="execution-error-GETgeneral-feedback--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-feedback--id--delete"></code></pre>
</div>
<form id="form-GETgeneral-feedback--id--delete" data-method="GET" data-path="general/feedback/{id}/delete" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-feedback--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-feedback--id--delete" onclick="tryItOut('GETgeneral-feedback--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-feedback--id--delete" onclick="cancelTryOut('GETgeneral-feedback--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-feedback--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/feedback/{id}/delete</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETgeneral-feedback--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



