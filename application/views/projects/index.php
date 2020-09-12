<h1>Projects</h1>

<table class="table table-hover table-bordered table-responsive">
    <thead>
        <tr>
            <th>Project name</th>
            <th>Project body</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($projects as $project): ?>

        <tr>
            <td><?php echo $project->project_name; ?></td>
            <td><?php echo $project->project_body; ?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>