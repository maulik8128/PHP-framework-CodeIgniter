<h1>Task for: <?php echo $project_name; ?>  </h1>



<table class="table table-hover table-bordered table-responsive">
    <thead>
        <tr>
            <th>Task name</th>
            <th>Task Description</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>



        <tr>
            <div class="task-name">
                <td><?php echo $task->task_name; ?>
            </div>

            <div class="task-action">

                <a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit</a>
                <a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete</a>


            </div>
            </td>
            <td><?php echo $task->task_body; ?></td>

            <td><?php echo $task->date_created; ?></td>

  <td><a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>">Mark Complete</a></td>
<td><a href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->id; ?>">Mark InComplete</a></td>
        </tr>

    </tbody>
</table>