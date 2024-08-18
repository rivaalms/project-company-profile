import { BaseForm } from 'craftable';

export default {
	mixins: [BaseForm],
    data() {
        return {
            customDatetimePickerConfig: {
                enableTime: false,
                time_24hr: false,
                enableSeconds: false,
                dateFormat: 'Y-m-d',
                altInput: true,
                altFormat: 'Y-m-d',
                locale: null
            }
        }
    }
};