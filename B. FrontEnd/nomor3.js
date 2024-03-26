document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let image = document.getElementById("image").value;
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;

    // let contactList = document.getElementById("contactList");
    // let newContact = document.createElement("li");
    // newContact.textContent = image + " - " + name + " - " + phone;
    // contactList.appendChild(newContact);

    
    
    let newContact = document.createElement("tr");
        // newContact.classList.add("contactList");
        newContact.innerHTML = `
                <td><img class="img-fluid" width="50" height="50" src="${image}" alt=""></td>
                <td>${name}</td>
                <td>${phone}</td>
        `;
    
    document.getElementById("contactList").appendChild(newContact);


    
    // var table = document.getElementById("contactList").getElementsByTagName('tbody')[0];
    // var newRow = table.insertRow(table.length);
    // cell1 = newRow.insertCell(0);
    // cell1.innerHTML = image;
    // cell2 = newRow.insertCell(1);
    // cell2.innerHTML = name;
    // cell3 = newRow.insertCell(2);
    // cell3.innerHTML = phone;
    // cell4 = newRow.insertCell(3);


    document.getElementById("image").value = "";
    document.getElementById("name").value = "";
    document.getElementById("phone").value = "";
});
