<!-- Basic example -->
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>table.table</strong></p>
    <table class="table">
        <thead>
            <tr>
                <th>thead tr th</th>
                <th>th</th><th>Header</th><th>Header</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>tbody tr td</td>
                <td>td</td><td>Data</td><td>Data</td>
            </tr>
            <tr><td>Data</td><td>Data</td><td>Data</td><td>Data</td></tr>
        </tbody>
    </table>
</div>

<div class="row">
    <!-- Striped rows -->
    <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>table.table.table-striped</strong></p>
        <table class="table table-striped">
            <thead>
                <tr><th>Header</th><th>Header</th></tr>
            </thead>
            <tbody>
                <tr><td>Data</td><td>Data</td></tr>
                <tr><td>Data</td><td>Data</td></tr>
            </tbody>
        </table>
    </div>

    <!-- Bordered table -->
    <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>..table-bordered</strong></p>
        <table class="table table-bordered">
            <thead>
                <tr><th>Header</th><th>Header</th></tr>
            </thead>
            <tbody>
                <tr><td>Data</td><td>Data</td></tr>
                <tr><td>Data</td><td>Data</td></tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <!-- Hover rows -->
    <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>..table-hover</strong></p>
        <table class="table table-hover">
            <thead>
                <tr><th>Header</th><th>Header</th></tr>
            </thead>
            <tbody>
                <tr><td>Data</td><td>Data</td></tr>
                <tr><td>Data</td><td>Data</td></tr>
            </tbody>
        </table>
    </div>

    <!-- Condensed table -->
    <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>..table-condensed</strong></p>
        <table class="table table-condensed">
            <thead>
                <tr><th>Header</th><th>Header</th></tr>
            </thead>
            <tbody>
                <tr><td>Data</td><td>Data</td></tr>
                <tr><td>Data</td><td>Data</td></tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Responsive tables and Contextual classes -->
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>div.table-responsive table.table</strong></p>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Header</th>
                    <th>Header</th><th>Header</th><th>Header</th><th>Header</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="active">td.active</td>
                    <td class="success">td.success</td>
                    <td class="info">td.info</td>
                    <td class="warning">td.warning</td>
                    <td class="danger">td.danger</td>
                </tr>
                <tr class="active">
                    <td>tr.active td</td>
                    <td colspan="4">
                        Applies the hover color to a particular row or cell
                    </td>
                </tr>
                <tr class="success">
                    <td>tr.success td</td>
                    <td colspan="4">
                        Indicates a successful or positive action
                    </td>
                </tr>
                <tr class="info">
                    <td>tr.info td</td>
                    <td colspan="4">
                        Indicates a neutral informative change or action
                    </td>
                </tr>
                <tr class="warning">
                    <td>tr.warning td</td>
                    <td colspan="4">
                        Indicates a warning that might need attention
                    </td>
                </tr>
                <tr class="danger">
                    <td>tr.danger td</td>
                    <td colspan="4">
                        Indicates a dangerous or potentially negative action
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>