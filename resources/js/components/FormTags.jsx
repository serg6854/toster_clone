import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class FormTags extends Component {
    constructor(props) {
        super(props);

        this.state = {
            style: {
                display: 'block',
            },
            tagsInput: '',
            tags: []
        }
    }

    render() {
        return (
            <div className='wrapper' style={{position: 'relative'}}>
                <input className='field__input'
                       id='question_tags'
                       required={true}
                       name='tags'
                       type='text'
                       autoComplete='off'
                       value={this.tagsInput}
                       defaultValue=''
                />

                <ul className='tagit ui-widget ui-widget-content ui-corner-all'>
                    <li className='tagit-choice ui-widget-content ui-state-default ui-corner-all tagit-choice-editable'>
                        <span className='tagit-label'>Тестирование ПО</span>
                        <a className='tagit-close'>
                            <span className='text-icon'>×</span>
                            <span className='ui-icon ui-icon-close'/>
                        </a>
                    </li>
                    <li className='tagit-choice ui-widget-content ui-state-default ui-corner-all tagit-choice-editable'>
                        <span className='tagit-label'>Тестирование ПО</span>
                        <a className='tagit-close'>
                            <span className='text-icon'>×</span>
                            <span className='ui-icon ui-icon-close'/>
                        </a>
                    </li>
                    <li className='tagit-choice ui-widget-content ui-state-default ui-corner-all tagit-choice-editable'>
                        <span className='tagit-label'>Тестирование ПО</span>
                        <a className='tagit-close'>
                            <span className='text-icon'>×</span>
                            <span className='ui-icon ui-icon-close'/>
                        </a>
                    </li>
                    <li className='tagit-new'>
                        <span role='status' aria-live='polite' className='ui-helper-hidden-accessible'>
                            3 results are available, use up and down arrow keys to navigate.
                        </span>
                        {/*<input type='text' maxLength='50' className='ui-widget-content ui-autocomplete-input'*/}
                               {/*tabIndex='3'*/}
                               {/*autoComplete='off'/>*/}
                        <input className='ui-widget-content ui-autocomplete-input'
                               id='question_tags'
                               required={true}
                               name='tags'
                               type='text'
                               autoComplete='off'
                               value={this.tagsInput}
                               defaultValue=''
                        />
                    </li>
                </ul>

                <ul className='ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all autocomplete_tags'
                    id='ui-id-1' tabIndex='0' style={this.state.style}>
                    {this.state.tags.map(tag => (
                        <li className='ui-search-type-tag ui-menu-item' role='presentation' key={tag.id}>
                            <a id='ui-id-6' className='ui-corner-all' tabIndex='-1'>
                                <img className='icon_suggest icon_tag-img'
                                     src='https://habrastorage.org/files/4d0/738/fc1/4d0738fc1d9b4e0b8818bea5ac8a4923.png'
                                     alt='user avatar'/>
                                <span>{tag.title}</span></a>
                        </li>
                    ))}
                </ul>

            </div>
        )
    }

    fetchTags(e) {
        if (e.target.value.length < 3) {
            return;
        }

        axios.get(`/tags?title=${e.target.value}`)
            .then(resp => {
                this.setState({
                    tags: resp.data.data
                })
            });
    }
}

if (document.getElementById('form-tags')) {
    ReactDOM.render(<FormTags/>, document.getElementById('form-tags'));
}

