<div class="form-page">
    <div class="form-box">
        <div class="form-container">
            <button class="close btn bg-danger create-btn">Go back</button>
            <div class="container" style="padding:10px">

                <h2 class="mt-2 primary">New Project</h2>
                <form action="{{ route('project.store') }}" method="POST" style="margin-top:45px;">
                    @csrf

                    <label for="project_title">Project Title:</label><br><br>
                    <input class="form-control" type="text" id="project_title" name="project_title"><br><br>

                    <label for="project_slug">Slug:</label><br><br>
                    <input class="form-control" type="text" id="project_slug" name="project_slug"><br><br>

                    <label for="thumnail">Project thumbnail:</label><br><br>
                    <input class="form-control" type="file" id="thumbnail" name="thumbnail"><br><br>

                    <label for="Category">Category:</label><br><br>
                    <select id="category" name="category" class="form-control">
                        <option value="Html/css">HTML/CSS</option>
                        <option value="React">React</option>
                        <option value="Laravel">Laravel</option>
                        <option value="Python">Python</option>
                    </select><br><br>


                    <label for="Descriptions">Description:</label><br><br>
                    <textarea id="editor" name="description"></textarea><br><br>

                    <label for="submission">Date of completation:</label><br><br>
                    <input class="form-control" type="date" id="dos" name="dos"> <br><br>

                    <label for="email">Email:</label><br><br>
                    <input class="form-control" type="text" id="email" name="email"><br><br>

                    <label for="code">Source code:</label><br><br>
                    <input class="form-control" type="text" id="code" name="code"><br><br>

                    <label for="Fees">Price after completation:</label><br><br>
                    <input class="form-control" type="text" id="fee" name="fee"><br><br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>