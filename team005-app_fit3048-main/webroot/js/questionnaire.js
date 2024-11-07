/*
class Separator {
    constructor(text) {
        this.text = text;
    }

    returnElement() {
        const className = "mt-2"
        var element = document.createElement("div");
        element.className = className;

        element.appendChild(document.createElement("hr"));

        var text = document.createElement("h6");
        text.innerHTML = this.text;
        element.appendChild(text);

        return element;
    }

}
*/

class SelectOption {
    constructor(value, text, isFirstOption = false) {
        this.value = value;
        this.text = text;
        this.isFirstOption = isFirstOption;
    }

    returnElement() {
        if (this.isFirstChild == true) {
            var element = document.createElement("option");
            element.selected = true;
            element.innerHTML = this.text;
            return element;

        } else {
            var element = document.createElement("option");
            element.value = this.value;
            element.innerHTML = this.text;
            return element;
        }
    }

    getValue() {
        return null;
    }

    setValue(value) {
        document.getElementById(this.inputId).value = value;
    }
}

class SelectMenu {
    constructor(inputId, label, firstChildText, options) {
        this.inputId = inputId;
        this.label = label;
        this.firstChildText = firstChildText;
        this.options = options;
    }

    setAsRequired() {
        this.firstChildText = this.firstChildText + "*";
    }

    returnElement() {
        const classname = "form-select mt-2";
        var element = document.createElement("select");
        element.className = classname;
        element.id = this.inputId;
        element.setAttribute('aria-label',this.label);
        element.onchange = function() {
            // FIXME: Add this onchange callback to allow realtime check/save of questions at the time of changing answers. 
            // TODO: Make sure to remove those related stuff from onNext() and onPrevious() as they're redundent
            questionnaire.saveAnswersForCurrentSection();
            if (shouldSubmitButtonBeShown()) {
                showSubmitButton();
            }
        };

        var firstchild = new SelectOption("",this.firstChildText,true);
        element.appendChild(firstchild.returnElement());

        for (var i = 0; i < this.options.length; i++) {
            element.appendChild(this.options[i].returnElement());
        }
        return element;
    }

    getValue() {
        return document.getElementById(this.inputId).value;
    }

    setValue(value) {
        document.getElementById(this.inputId).value = value;
    }
}

class InputField {
    constructor(inputId, inputType, labelText, placeholder, isMultiline) {
        this.inputId = inputId;
        this.inputType = inputType;
        this.labelText = labelText;
        this.placeholder = placeholder;
        this.isMultiline = isMultiline;
    }

    setAsRequired() {
        this.labelText = this.labelText + "*";
    }

    returnElement() {
        const divclassname = "form-floating mt-2";
        const classname = "form-control";
        var element = document.createElement("div");
        element.className = divclassname;

        var input;

        if (this.isMultiline) {
            input = document.createElement("textarea")
        } else {
            input = document.createElement("input")
            input.type = this.inputType;
        }

        input.placeholder = this.placeholder;
        input.id = this.inputId;
        input.className = classname;

        var label = document.createElement("label");
        label.setAttribute("for", this.inputId);
        label.innerHTML = this.labelText;

        element.appendChild(input);
        element.appendChild(label);
        return element;
    }

    getValue() {
        return document.getElementById(this.inputId).value;
    }

    setValue(value) {
        document.getElementById(this.inputId).value = value;
    }
}

/*
class RadioCheckField {
    constructor(inputId, fieldName, labelText, isRadio) {
        this.inputId = inputId;
        this.fieldName = fieldName;
        this.labelText = labelText;
        this.isRadio = isRadio;
    }

    returnElement() {
        const divclassname = "form-check";
        const inputclassname = "form-check-input";
        const labelclassname = "form-check-label";
        var element = document.createElement("div");
        element.className = divclassname;

        var input = document.createElement("input");
        input.className = inputclassname;

        if (this.isRadio) {
            input.type = "radio";
            input.name = this.fieldName;
        } else {
            input.type = "checkbox";
        }

        input.id = this.inputId;

        var label = document.createElement("label");
        label.className = labelclassname;
        label.setAttribute("for", this.inputId);
        label.innerHTML = this.labelText;

        element.appendChild(input);
        element.appendChild(label);
        return element;
    }
}


class RadioCheckMenu {
    constructor(menuName, options, isRadio) {
        this.menuName = menuName;
        this.options = options;
        this.isRadio = isRadio;
    }

    returnElement() {
        const classname = "";
        var element = document.createElement("div");
        element.className = classname;

        for (var i = 0; i < this.options.length; i++) {
            element.appendChild(this.options[i].returnElement());
        }
        return element;
    }
}
*/

class Question {
    constructor(id, inputElement, isRequired = true, isNotInputElement = false) {
        this.id = id;
        this.inputElement = inputElement;
        this.isRequired = isRequired;
        if (isRequired == true) {
            this.inputElement.setAsRequired();
        }
        this.isNotInputElement = isNotInputElement;
    }

    show() {
        document.getElementById("question-input").innerHTML = "";
        document.getElementById("question-input").appendChild(this.inputElement.returnElement());
        return true;
    }

    getAnswer() {
        return this.inputElement.getValue();
    }

    setAnswer(value) {
        this.inputElement.setValue(value);
    }

    returnId() {
        return this.id;
    }
}

class Section {
    constructor(id, title, subtitle) {
        this.id = id;
        this.title = title;
        this.subtitle = subtitle;
        this.questionsArray = [];
        this.answersObject = new Object();
    }

    show() {
        document.getElementById("section-input").innerHTML = "";
        for (let i = 0; i < this.questionsArray.length; i++) {
            document.getElementById("section-input").appendChild(this.questionsArray[i].inputElement.returnElement());
        }
        this.setTitle();
        this.setSubtitle();
    }

    setTitle() {
        document.getElementById("section-title").innerHTML = this.title;
    }

    setSubtitle() {
        document.getElementById("section-subtitle").innerHTML = this.subtitle;
    }

    addQuestion(question) {
        this.questionsArray.push(question);
        this.answersObject[question.returnId()] = null;
    }

    saveAnswers() {
        for (let i = 0; i < this.questionsArray.length; i++) {
            if (this.questionsArray[i].getAnswer() != "") {
                this.answersObject[this.questionsArray[i].id] = this.questionsArray[i].getAnswer();
            }
        }
    }

    showSavedAnswers() {
        for (let i = 0; i < this.questionsArray.length; i++) {
            if (this.answersObject[this.questionsArray[i].id]) {
                this.questionsArray[i].setAnswer(this.answersObject[this.questionsArray[i].id]);
            }
        }
    }

    haveAllQuestionsBeenAnswered() {
        for (let i = 0; i < this.questionsArray.length; i++) {
            if (this.questionsArray[i].isRequired == true) {
                if (this.answersObject[this.questionsArray[i].id] == null) {
                    return false;
                }
            }
        }
        return true;
    }

    getAnswersObject() {
        return this.answersObject;
    }

    setAnswersObject(answersObject) {
        this.answersObject = answersObject;
    }
}

class Questionnaire {
    constructor(id, title, subtitle) {
        this.id = id;
        this.title = title;
        this.subtitle = subtitle;
        this.sectionsArray = [];
        this.currentSectionIndex = 0;
        this.sectionIndicesToSkip = [];
    }

    init() {
        this.updateSectionNavButtons();
        this.getCurrentSection().show();
    }

    getNumberOfSections() {
        return this.sectionsArray.length;
    }

    getSectionIndexById(id) {
        for (let i = 0; i < this.sectionsArray.length; i++) {
            if (this.sectionsArray[i].id == id) {
                return i;
            }
        }
        return -1;
    }

    removeSectionById(id) {
        for (let i = 0; i < this.sectionArray.length; i++) {
            if (this.sectionArray.id == id) {
                this.removeSectionByIndex(i);
            }
        }
    }

    addSectionToSkipByIndex(sectionToSkipIndex) {
        if (this.sectionIndicesToSkip.indexOf(sectionToSkipIndex) == -1) {
            console.log("Added section to skip");
            this.sectionIndicesToSkip.push(sectionToSkipIndex);
        }
    }

    removeSectionToSkipByIndex(sectionToRemoveIndex) {
        const i = this.sectionIndicesToSkip.indexOf(sectionToRemoveIndex);
        if (i > -1) {
            console.log("Removed section to skip");
            this.sectionIndicesToSkip.splice(i, 1);
        }
    }

    addSectionToSkipById(id) {
        var index = this.getSectionIndexById(id);
        if (index > -1) {
            this.addSectionToSkipByIndex(index);
        } else {
            throw "Section with that id does not exist";
        }
    }

    removeSectionToSkipById(id) {
        var index = this.getSectionIndexById(id);
        if (index > -1) {
            this.removeSectionToSkipByIndex(index);
        } else {
            throw "Section with that id does not exist";
        }
    }

    addSection(section) {
        this.sectionsArray.push(section);
    }

    removeSectionByIndex(index) {
        this.sectionsArray.splice(index, 1);
    }

    getNextNonSkippedIndex(index = this.currentSectionIndex) {
        if (this.sectionIndicesToSkip.indexOf(index + 1) == -1) {
            return index + 1;
        } else {
            return this.getNextNonSkippedIndex(index + 1);
        }
    }

    getPrevNonSkippedIndex(index = this.currentSectionIndex) {
        if (this.sectionIndicesToSkip.indexOf(index - 1) == -1) {
            return index - 1;
        } else {
            return this.getPrevNonSkippedIndex(index - 1);
        }
    }

    getNextIndexIncrement(index = this.currentSectionIndex) {

        var nextNonSkippedIndex = this.getNextNonSkippedIndex(index);

        //if next nonskipped index is outside bounds, don't go over
        if (nextNonSkippedIndex > this.sectionsArray.length - 1) {
            return 0;
        } else {
            return nextNonSkippedIndex - index;
        }
    }

    getPreviousIndexIncrement(index = this.currentSectionIndex) {

        var prevNonSkippedIndex = this.getPrevNonSkippedIndex(index);

        //if prev nonskipped index is outside bounds, don't go over
        if (prevNonSkippedIndex < 0) {
            return 0;
        } else {
            return prevNonSkippedIndex - index;
        }
    }

    nextSection() {
        this.currentSectionIndex += this.getNextIndexIncrement(this.currentSectionIndex);

        this.updateSectionNavButtons();

        this.getCurrentSection().show();
        this.showSavedAnswersToCurrentSection();
    }

    previousSection() {
        this.currentSectionIndex += this.getPreviousIndexIncrement(this.currentSectionIndex);

        this.updateSectionNavButtons();

        this.getCurrentSection().show();
        this.showSavedAnswersToCurrentSection();
    }

    updateSectionNavButtons() {
        if(this.getNextIndexIncrement() > 0) {
            this.setBtnDisabled("nextBtnTop", false);
            this.setBtnDisabled("nextBtnBottom", false);
        } else {
            this.setBtnDisabled("nextBtnTop", true);
            this.setBtnDisabled("nextBtnBottom", true);
        }

        if(this.getPreviousIndexIncrement() < 0) {
            this.setBtnDisabled("prevBtnTop", false);
            this.setBtnDisabled("prevBtnBottom", false);
        } else {
            this.setBtnDisabled("prevBtnTop", true);
            this.setBtnDisabled("prevBtnBottom", true);
        }
    }

    setBtnDisabled(id, trueForDisable) {
        const btn = document.getElementById(id);
        if (btn != null) {
            if (trueForDisable) {
                btn.classList.add("disabled");
            } else {
                btn.classList.remove("disabled");
            }
        }
    }

    saveAnswersForCurrentSection() {
        this.sectionsArray[this.currentSectionIndex].saveAnswers();
    }

    showSavedAnswersToCurrentSection() {
        this.sectionsArray[this.currentSectionIndex].showSavedAnswers();
    }

    setTitle() {
        document.getElementById("questionnaire-title").innerHTML = this.title;
    }

    setSubtitle() {
        document.getElementById("questionnaire-subtitle").innerHTML = this.subtitle;
    }

    getCurrentSection() {
        return this.sectionsArray[this.currentSectionIndex];
    }

    getSectionByIndex(index) {
        if (index => 0 && index < this.sectionsArray.length) {
            return this.sectionsArray[index];
        } else {
            return null;
        }
    }

    getAnswerByQuestionId(id) {
        for (let i = 0; i < this.sectionsArray.length; i++) {
            if (this.sectionsArray[i].answersObject.hasOwnProperty(id)) {
                return this.sectionsArray[i].answersObject[id];
            } else {

            }
        }
        console.log(id);
        throw 'No question with the given id exists';
    }

    setAnswerByQuestionId(id, answer) {
        for (let i = 0; i < this.sectionsArray.length; i++) {
            if (this.sectionsArray[i].answersObject.hasOwnProperty(id)) {
                this.sectionsArray[i].answersObject[id] = answer;
                return true;
            } else {

            }
        }
        console.log(id);
        throw 'No question with the given id exists';
    }

    haveAllSectionsBeenAnswered() {
        //iterate through all sections
        for (let i = 0; i < this.sectionsArray.length; i++) {
            //if section is not skipped
            if (this.sectionIndicesToSkip.indexOf(i) == -1) {
                //if section has been answered
                if (this.sectionsArray[i].haveAllQuestionsBeenAnswered()) {
                    continue;
                } else {
                    return false;
                }
            }
        }
        return true;
    }

    //GETTING ANSWER SUMMARY
    objectifyQuestionnaireWithAnswers() {
        this.saveAnswersForCurrentSection();
        var questionnaireObject = new Object();
        for (var i = 0; i < this.sectionsArray.length; i++) {
            if (this.sectionIndicesToSkip.indexOf(this.currentSectionIndex) == -1) {
                questionnaireObject[this.sectionsArray[i].id] = this.sectionsArray[i].getAnswersObject();
            }
        }

        var outObject = new Object();
        outObject[this.id] = questionnaireObject;
        return outObject;
    }

    getQuestionsAndAnswersJSONString() {
        var outString = JSON.stringify(this.objectifyQuestionnaireWithAnswers());
        return outString;
    }

    //RESTORING QUESTIONNAIRE STATE FROM QUESTIONNAIRE OBJECT
    setAnswersFromQuestionsAndAnswersObject(questionnaireObject) {
        if (!questionnaireObject.hasOwnProperty(this.id)) {
            throw "Object contains no questionnaire data for this questionnaire";
        }

        var sectionsObject = questionnaireObject[this.id];
        for (let i = 0; i < this.sectionsArray.length; i++) {
            this.sectionsArray[i].setAnswersObject(sectionsObject[this.sectionsArray[i].id]);
        }
        this.showSavedAnswersToCurrentSection();
    }

    setAnswersFromQuestionsAndAnswersJSONString(inString) {
        this.setAnswersFromQuestionsAndAnswersObject(JSON.parse(inString));
    }
}
