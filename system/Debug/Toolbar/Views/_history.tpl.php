<table>
    <thead>
        <tr>
            <th>Action</th>
            <th>Datetime</th>
            <th>Status</th>
            <th>Method</th>
            <th>URL</th>
            <th>Accept</th>
            <th>Is AJAX?</th>
        </tr>
    </thead>
    <tbody>
    {files}
        <tr data-active="{active}">
        	<td style="width: 150px">
            	<button id="ci-history-load">Load</button>
            	<button id="ci-history-delete">Delete</button>
            </td>
            <td style="width: 140px">{datetime}</td>
            <td>{status}</td>
            <td>{method}</td>
            <td>{url}</td>
            <td>{accept}</td>
            <td>{isAJAX}</td>
        </tr>
    {/files}
    </tbody>
</table>
