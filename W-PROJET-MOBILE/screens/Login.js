import {
    View,
    Text,
    StyleSheet,
    TouchableOpacity,
    TextInput,
    Image,
} from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { useState } from "react";
import * as SecureStore from "expo-secure-store";
import axios from "axios";
import { API_BASE_URL } from "../IP";

export default function Login({ navigation }) {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    /**
     * This function handles the process of logging in a user by sending a POST request to the API with
     * their email and password, storing the token securely using Expo's SecureStore, and navigating to
     * the home screen upon successful login.
     */
    const handelLogin = async () => {
        try {
            const response = await axios.post(`${API_BASE_URL}/api/login`, {
                email,
                password,
            });
            const token = response.data.token;
            // Store the token securely using Expo's SecureStore
            getUserinfo(token);
            // Navigate to the home page or any other desired screen
        } catch (error) {
            console.error("Login failed:", error);
        }
    };

    const getUserinfo = async (token) => {
        try {
            const response = await axios.get(`${API_BASE_URL}/api/userinfo`, {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });
            const user = response.data.user;
            const userString = JSON.stringify(user);
            // Extract the array of projects
            await SecureStore.setItemAsync("token", token);
            await SecureStore.setItemAsync("user", userString);

            navigation.navigate("Home_Screen");
        } catch (error) {
        navigation.navigate("Login");
            return [];
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
                <Image
                    source={require("../assets/1.png")}
                    className="h-20  w-80  from-neutral-50 drop-shadow-xl"
                />
                <Text className="  mt-3 text-xl font-medium ">
                    Login As A User
                </Text>
            </View>
            <View className="mt-5  w-full flex-col">
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
                    onPress={handelLogin}
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
