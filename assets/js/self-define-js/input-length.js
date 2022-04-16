inputLength = (inputLabelName, inputName) => 
    $(`#${inputLabelName}`).text(`${inputName.value.length}/${inputName.maxLength}`);