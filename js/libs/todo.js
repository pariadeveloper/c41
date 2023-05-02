$(document).ready(function() {
    // Add task to list
    $("#add-task-button").click(function() {
      var task = $("#task-input").val();
      if (task === "") {
        alert("Please enter a task!");
      } else {
        $.ajax({
            url: 'class/controller.php',
            method: 'POST',
            data: {
              action: 'addAction',
              task: task
            },
          success: function(response) {
            var listItem = $("<li>").addClass("list-group-item d-flex justify-content-between align-items-center").append($("<span>").text(task)).append($("<button>").addClass("btn btn-danger remove-task-button").text("Remove"));
            $("#the-list").append(listItem);
            $("#task-input").val("");
          }
        });
      }
    });
  
    // Remove task from list
    $(document).on("click", ".remove-task-button", function() {
      var task = $(this).siblings("span").text();
      var listItem = $(this).closest("li");
      $.ajax({
        url: 'class/controller.php',
        method: 'POST',
        data: {
          action: 'removeAction',
          task: task
        },
        success: function(response) {
          listItem.remove();
        }
      });
    });
  });
  