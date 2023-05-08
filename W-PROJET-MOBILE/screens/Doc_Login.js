import {
    View,
    Text,
    StyleSheet,
    TouchableOpacity,
    TextInput,
} from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { useState } from "react";
import AsyncStorage from "@react-native-async-storage/async-storage";
import axios from "axios";

export default function Doc_Login({ navigation }) {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    const handleLogin = async () => {
        try {
            const response = await axios.post(`${API_BASE_URL}/api/tasks`, {
                email,
                password,
            });

            console.log(response.data); // Assuming your API returns a token field in the response
            const token = response.data.token;

            // Store the token in AsyncStorage for later use
            await AsyncStorage.setItem("token", token);

            // Navigate to the home page or any other desired screen
            navigation.navigate("Home");
        } catch (error) {
            console.error("Login failed:", error);
        }
    };

    return (
        <View
            className="mt-4 flex-1 flex-col   items-center "
            style={{
                backgroundColor: "#F6F6F6",
            }}
        >
            <View className=" mx-5  mb-14  w-full items-center justify-center rounded-br-full ">
                <View className=" mt-10 ml-5 self-start">
                    <AntDesign name="arrowleft" size={24} color="black" />
                </View>
                <Text className="  mt-10 text-3xl font-extrabold ">Tabibi</Text>
                <Text className="  mt-3 text-xl font-medium ">
                    Login As A Doctor
                </Text>
            </View>
            <View className="mt-12  w-full flex-col">
                <View className="w-full flex-col   ">
                    <Text className="col-start-1 mx-7 mt-3 w-fit">
                        Email Address
                    </Text>
                    <TextInput
                        className="border-1 mx-7 h-10 w-80 rounded-md  border-gray-400 bg-white p-2 shadow-sm "
                        placeholder={"example@mail.com"}
                        onChangeText={(text) => setEmail(text)}
                    />
                </View>
                <View className="w-full flex-col   ">
                    <Text className="col-start-1 mx-7 mt-4 w-fit">
                        Password
                    </Text>
                    <TextInput
                        className="border-1 mx-7 h-10 w-80 rounded-md  border-gray-400 bg-white p-2 shadow-sm "
                        placeholder={"At least 8 characters"}
                        onChangeText={(text) => setPassword(text)}
                    />
                </View>
            </View>
            <View className=" mx-10 mt-20">
                <TouchableOpacity
                    className="mt-3 h-12 w-60 justify-center self-center rounded-lg bg-teal-400 shadow-lg"
                    onPress={handleLogin}
                >
                    <Text className=" self-center text-xl text-white">
                        Login
                    </Text>
                </TouchableOpacity>
            </View>
        </View>
    );
}
// style={styles.container}
const styles = StyleSheet.create({
    container: {
        backgroundColor: "#E6E8EB",
    },
});
