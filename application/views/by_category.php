<html> 
    <head>
        <meta charset="UFT-8">  
    </head>
        <body>
            <h3>Tasks by Category</h3>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Task</th>
                    <th>Category</th>
                </tr>
                {display_tasks}
                <tr>
                    <td>{id}</td>
                    <td>{task}</td>
                    <td>{category}</td>
                </tr>
                {/display_tasks}    
            </table>
        </body>
</html>
