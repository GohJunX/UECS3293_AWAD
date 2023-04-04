import React, { useState } from 'react';
import ReactDOM from 'react-dom';
function EditProfile() {
  const [editable, setEditable] = useState(false);

  const handleEditClick = () => {
    setEditable(true);
    document.getElementById("editBtn").style.display = "none";
    document.getElementById("saveBtn").style.display = "block";
  }

  const handleSaveClick = () => {
    setEditable(false);
    document.getElementById("editBtn").style.display = "block";
    document.getElementById("saveBtn").style.display = "none";
  }

  return (
  <p>hi</p>
  );
}
if(document.getElementById("profile")){
    ReactDOM.render(<Profile />, document.getElementById("profile"));
}

