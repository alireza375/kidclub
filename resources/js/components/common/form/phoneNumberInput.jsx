import React from 'react'
import PhoneInput from 'react-phone-number-input'
import { Form } from 'antd'
import { isValidPhoneNumber } from "react-phone-number-input";
import 'react-phone-number-input/style.css'


const PhoneNumberInput = ({ name, label, required = false, initialValue = '', rules = [], dependencies = [], isEmail, readOnly, onChange, placeholder }) => {
    let initRules = [
        { required: required, message: `Please provide ${label?.toLowerCase() || 'a value'}` },
        () => ({
            validator(_, value) {
                if (value && !isValidPhoneNumber(value)) {
                    return Promise.reject(new Error('Invalid Phone number'))
                }
                return Promise.resolve();
            },
        })
    ]
    return (
        <Form.Item
            name={name}
            label={label}
            dependencies={dependencies}
            initialValue={initialValue}
            rules={[...initRules, ...rules]}
            className=''
        >
            <PhoneInput international onChange={onChange} defaultCountry="BD" readOnly={readOnly}
                className='focus:text-dark_text border rounded-md lg:w-full w-auto pl-2 phone' />
        </Form.Item>
    )
}

export default PhoneNumberInput
